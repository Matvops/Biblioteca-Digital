<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
           
        DB::table('books')->insert([
            [
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Clean Code',
                'year' => 2008,
                'readed' => true,
                'image' => 'https://m.media-amazon.com/images/I/41xShlnTZTL._SX374_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Clean Architecture',
                'year' => 2017,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41-sN-mzwKL._SX379_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The Clean Coder',
                'year' => 2011,
                'readed' => true,
                'image' => 'https://m.media-amazon.com/images/I/41x+2f+1zZ-L._SX380_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Agile Software Development',
                'year' => 2002,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41yGx+YI3eL._SX376_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Clean Agile',
                'year' => 2019,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41X9nZ1VZtL._SX379_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'Refactoring',
                'year' => 1999,
                'readed' => true,
                'image' => 'https://m.media-amazon.com/images/I/51kzOGeK9-L._SX379_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'Patterns of Enterprise Application Architecture',
                'year' => 2002,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/51TnXz+YQDL._SX379_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'UML Distilled',
                'year' => 2003,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41Z4Zr+6E6L._SX379_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'Domain-Specific Languages',
                'year' => 2010,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41VZK1l2YqL._SX379_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'Continuous Integration',
                'year' => 2006,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/51IuP+X7V+L._SX379_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 3,
                'category_id' => 1,
                'title' => 'Domain-Driven Design',
                'year' => 2003,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41yGx+YI3eL._SX376_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 4,
                'category_id' => 1,
                'title' => 'The Art of Computer Programming Vol. 1',
                'year' => 1968,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41yGx+YI3eL._SX376_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 4,
                'category_id' => 1,
                'title' => 'The Art of Computer Programming Vol. 2',
                'year' => 1969,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41yGx+YI3eL._SX376_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 4,
                'category_id' => 1,
                'title' => 'The Art of Computer Programming Vol. 3',
                'year' => 1973,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41yGx+YI3eL._SX376_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 4,
                'category_id' => 1,
                'title' => 'The Art of Computer Programming Vol. 4A',
                'year' => 2011,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41yGx+YI3eL._SX376_BO1,204,203,200_.jpg'
            ],   
            [
                'author_id' => 5,
                'category_id' => 1,
                'title' => 'Code Complete',
                'year' => 1993,
                'readed' => true,
                'image' => 'https://m.media-amazon.com/images/I/41yGx+YI3eL._SX376_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 5,
                'category_id' => 1,
                'title' => 'Rapid Development',
                'year' => 1996,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41yGx+YI3eL._SX376_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 5,
                'category_id' => 1,
                'title' => 'Software Estimation',
                'year' => 2006,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41yGx+YI3eL._SX376_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 6,
                'category_id' => 2,
                'title' => 'Novos Negócios Inovadores de Crescimento Empreendedor no Brasil',
                'year' => 2013,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41c0H5h4NML._SX331_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 6,
                'category_id' => 2,
                'title' => 'O que é estratégia digital?',
                'year' => 2021,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/51MEYgcq3oL._SX342_SY445_.jpg'
            ],
            [
                'author_id' => 7,
                'category_id' => 2,
                'title' => 'Lógica de Programação: A construção de algoritmos e estruturas de dados',
                'year' => 2012,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41VteFr9DoL._SX346_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 8,
                'category_id' => 2,
                'title' => 'Ruby on Rails: Novas tendências para o desenvolvimento Ágil de Aplicações Web',
                'year' => 2007,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41y8Tz39HtL._SX348_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 9,
                'category_id' => 2,
                'title' => 'HTML não é linguagem de programação',
                'year' => 2015,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41YQ2AHo9cL._SX331_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 10,
                'category_id' => 2,
                'title' => 'Código Limpo em Java',
                'year' => 2022,
                'readed' => true,
                'image' => 'https://m.media-amazon.com/images/I/51T3bYBnPUL._SX348_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 10,
                'category_id' => 2,
                'title' => 'Testes Automatizados de Software',
                'year' => 2019,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41WZBeKah3L._SX342_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 11,
                'category_id' => 3,
                'title' => 'O Guia do Mochileiro das Galáxias',
                'year' => 1979,
                'readed' => true,
                'image' => 'https://m.media-amazon.com/images/I/51p0KXtD1lL._SX341_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 11,
                'category_id' => 3,
                'title' => 'O Restaurante no Fim do Universo',
                'year' => 1980,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41bXPfUYO6L._SX344_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 12,
                'category_id' => 3,
                'title' => 'Neuromancer',
                'category_id' => '3',
                'year' => 1984,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/41LVxzmgcOL._SX325_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 13,
                'category_id' => 3,
                'title' => 'Eu, Robô',
                'year' => 1950,
                'readed' => true,
                'image' => 'https://m.media-amazon.com/images/I/51qk7ZuUgKL._SX344_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 13,
                'category_id' => 3,
                'title' => 'Fundação',
                'year' => 1951,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/51PIx1UlCjL._SX334_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 14,
                'category_id' => 3,
                'title' => '1984',
                'year' => 1949,
                'readed' => true,
                'image' => 'https://m.media-amazon.com/images/I/41G35DjvugL._SX331_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 14,
                'category_id' => 3,
                'title' => 'A Revolução dos Bichos',
                'year' => 1945,
                'readed' => true,
                'image' => 'https://m.media-amazon.com/images/I/51gZJ3fpMXL._SX340_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 15,
                'category_id' => 3,
                'title' => 'Snow Crash',
                'year' => 1992,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/51fekv3ZoOL._SX334_BO1,204,203,200_.jpg'
            ],
            [
                'author_id' => 15,
                'category_id' => 3,
                'title' => 'Cryptonomicon',
                'year' => 1999,
                'readed' => false,
                'image' => 'https://m.media-amazon.com/images/I/51dK6QWyhQL._SX331_BO1,204,203,200_.jpg'
            ]
        ]);
    }

}
