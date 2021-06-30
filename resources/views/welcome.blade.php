<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pokedex</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    </head>
    <body>
        <div id="app">
            <!--- The Nav -->
            <div class="relative bg-red-600">
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <div class="flex justify-between items-center border-b-1 border-gray-100 py-6 md:justify-start md:space-x-10">
                        <div class="lg:w-0 lg:flex-1 rounded-full text-white shadow-solid">
                            <a href="#" class="flex">
                                <img class="h-12 w-12" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Pok%C3%A9_Ball_icon.svg" alt="Workflow">
                            </a>
                        </div>

                        <div class="md:flex items-center justify-center space-x-8 md:flex-1 lg:w-0">
                            <h1 class="text-white text-3xl">The Pokedex</h1>
                        </div>

                        <div class="md:flex items-center justify-center space-x-8 md:flex-1 lg:w-0">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="container mx-auto">
                <div class="grid grid-cols-3 gap-4">
                    @foreach($pokemons as $pokemon)
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
                    @endforeach
                </div>
            </div>

            <!--- The Footer -->
            <footer class="footer bg-white relative pt-1 border-b-2 border-blue-700">
                <div class="container mx-auto px-6">
                    <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                        <div class="sm:w-2/3 text-center py-6">
                            <p class="text-sm text-blue-700 font-bold mb-2">
                                © 2021 Pokedex Project by Chris López.
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
