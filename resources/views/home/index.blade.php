@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold mb-4 text-center">Welcome to Arta Urbana Cluj</h1>
        <p class="text-lg text-center mb-8">Descoperă inima vibrantă a scenei artistice din Cluj! Explorează galerii de artă, participă la expoziții
            inedite și evenimente culturale vibrante care îți vor îmbogăți perspectiva asupra artei contemporane și
            tradiționale.
        </p>

        <section class="mb-8 text-center">
            <h2 class="text-2xl font-bold mb-2">Galerii</h2>
            <p class="mb-4">Plonjează în diversitatea artistică a galeriilor din Cluj, fiecare cu propriul său caracter unic.</p>
            <a href="{{ url('galleries') }}" class="inline-block bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600">Explorează galeriile</a>
        </section>

        <section class="mb-8 text-center">
            <h2 class="text-2xl font-bold mb-2">Expoziții Curente</h2>
            <p class="mb-4">Fii la curent cu cele mai recente expoziții și vernisaje care animă scena artistică locală.</p>
            <a href="{{ url('exhibitions') }}" class="inline-block bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600">Vezi expozițiile</a>
        </section>

        <section class="mb-8 text-center">
            <h2 class="text-2xl font-bold mb-2">Știri și Evenimente</h2>
            <p class="mb-4">Află ultimele noutăți și participă la evenimentele culturale care definesc Clujul ca pe un centru artistic vital.</p>
            <a href="{{ url('news') }}" class="inline-block bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600">Citește știrile</a>
        </section>

        <section class="mb-8 text-center">
            <h2 class="text-2xl font-bold mb-2">Târguri de Artă</h2>
            <p class="mb-4">Descoperă târgurile de artă unde pasionații și colecționarii pot cumpăra opere de artă direct de la artiștii lor preferați.</p>
            <a href="{{ url('fairs') }}" class="inline-block bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600">Explorează târgurile</a>
        </section>
    </div>
@endsection
