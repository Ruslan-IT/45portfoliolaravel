<div>

    {{-- 🔍 Поиск --}}
    <input
        type="text"
        wire:model.live="search"
        placeholder="Поиск работ..."
        style="padding:8px; width:300px;"
    >

    <br><br>

    {{-- 📦 Список работ --}}
    @forelse($works as $work)
        <div style=" margin-bottom:10px; padding:10px;">
            <h3>{{ $work->title }}</h3>
            <p>{{ $work->description }}</p>
        </div>
    @empty
        <p>Ничего не найдено</p>
    @endforelse

    {{-- 📄 Пагинация --}}
   {{-- <div>
        {{ $works->links() }}
    </div>--}}

</div>
