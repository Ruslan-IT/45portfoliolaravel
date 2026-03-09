<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Keyword;
use App\Models\Position;

class CheckPositions extends Command
{
    protected $signature = 'positions:check';
    protected $description = 'Check Yandex positions';

    public function handle()
    {

        $domain = "web-ruslan.ru";

        $keywords = Keyword::where('active', true)->get();

        foreach ($keywords as $keyword) {

            $response = Http::get("https://yandex.ru/search/xml", [
                'user' => env('YANDEX_XML_USER'),
                'key' => env('YANDEX_XML_KEY'),
                'query' => $keyword->keyword,
                'lr' => $keyword->region,
            ]);

            $xml = simplexml_load_string($response->body());

            $position = null;
            $i = 1;

            foreach ($xml->response->results->grouping->group as $group) {

                $url = (string)$group->doc->url;

                if (str_contains($url, $domain)) {
                    $position = $i;
                    break;
                }

                $i++;
            }

            Position::create([
                'keyword_id' => $keyword->id,
                'position' => $position,
                'checked_at' => now()
            ]);

        }

    }
}
