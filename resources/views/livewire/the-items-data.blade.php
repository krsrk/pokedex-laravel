<div class="max-w-xs rounded overflow-hidden shadow-lg my-5">
    <img loading="lazy" class="w-full" src="{{ $pokemon->image_url }}" alt="{{ $pokemon->name }}">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $pokemon->code }} - {{ $pokemon->name }}</div>
        <p class="text-grey-darker text-base">
            <b>Height: </b> {{ $pokemon->height }} <br>
            <b>Weight: </b> {{ $pokemon->weight }} <br>
            <b>Ability: </b> {{ $pokemon->ability }}
        </p>
    </div>
    <div class="px-6 py-4">
        <a href="{{ $pokemon->more_info_url }}" target="_blank"
           class="tracking-wider text-white bg-red-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold"
           title="{{ $pokemon->name }}">
            <i class="fas fa-info-circle" aria-hidden="true"></i> More Info
        </a>
    </div>
</div>
