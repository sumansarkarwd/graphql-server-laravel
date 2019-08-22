<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Lean Startup',
            'author' => 'Eric Ries',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/the-lean-startup.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 1
        ]);
        Book::create([
            'title' => 'Rework',
            'author' => 'Jason Fried & David Heinemeier Hansson',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/rework.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 1
        ]);
        Book::create([
            'title' => 'Sapiens',
            'author' => 'Yuval Noah Harari',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/sapiens.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 1
        ]);
        Book::create([
            'title' => 'Steve Jobs',
            'author' => 'Walter Isaacson',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/steve-jobs.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 1
        ]);
        Book::create([
            'title' => 'Jab, Jab, Jab, Right Hook',
            'author' => 'Gary Vaynerchuk',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/jab-jab-jab-right-hook.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 1
        ]);
        Book::create([
            'title' => 'Tribe of Mentors',
            'author' => 'Tim Ferris',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/tribe-of-mentors.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 1
        ]);
        Book::create([
            'title' => 'The Millionaire Fastlane',
            'author' => 'MJ DeMarco',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/the-millionaire-fastlane.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 2
        ]);
        Book::create([
            'title' => 'Hooked: How to Build Habit-Forming Products',
            'author' => 'Nir Eyal',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790671/booksql/hooked.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 2
        ]);
        Book::create([
            'title' => 'Good to Great',
            'author' => 'Jim Collins',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790671/booksql/good-to-great.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 2
        ]);
        Book::create([
            'title' => 'How to win friends and influence people',
            'author' => 'Dale Carnegie',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790671/booksql/how-to-win-friends-and-influence-people.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 2
        ]);
        Book::create([
            'title' => 'Tools of Titans',
            'author' => 'Tim Ferris',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/tools-of-titans.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 2
        ]);
        Book::create([
            'title' => 'Influence',
            'author' => 'Robert B. Cialdini',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/influence.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 2
        ]);
        Book::create([
            'title' => 'The Personal MBA',
            'author' => 'Josh Kaufman',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/the-personal-mba.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 3
        ]);
        Book::create([
            'title' => 'The 80/20 Principle',
            'author' => 'Richard Koch',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/the-80-20-principle.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 3
        ]);
        Book::create([
            'title' => 'The 10X Rule',
            'author' => 'Grant Cardone',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/the-10x-rule.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 3
        ]);
        Book::create([
            'title' => 'Start with Why',
            'author' => 'Simon Sinek',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/start-with-why.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 4
        ]);
        Book::create([
            'title' => 'Smarter Faster Better',
            'author' => 'Charles Duhigg',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/smarter-faster-better.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 4
        ]);
        Book::create([
            'title' => 'Springboard',
            'author' => 'G. Richard Shell',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/springboard.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 4
        ]);
        Book::create([
            'title' => 'Secret Sauce',
            'author' => 'Austen Allred',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/secret-sauce.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 5
        ]);
        Book::create([
            'title' => 'Netflixed',
            'author' => 'Gina Keating',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/netflixed.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 5
        ]);
        Book::create([
            'title' => 'Marketing for Developers',
            'author' => 'Justin Jackson',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/marketing-for-developers.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 5
        ]);
        Book::create([
            'title' => 'Drive',
            'author' => 'Daniel H. Pink',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790665/booksql/drive.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 6
        ]);
        Book::create([
            'title' => 'Deep Work',
            'author' => 'Cal Newport',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790665/booksql/deep-work.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 6
        ]);
        Book::create([
            'title' => 'Crushing It',
            'author' => 'Gary Vaynerchuk',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790665/booksql/crushing-it.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'category_id' => 6
        ]);
    }
}
