<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Blogs')->insert([
            'title' => "1. Babba C Rivera Best Eco-Conscious Blogger",
            'description' => "Babba C Rivera is a Swedish Latina currently living in New York City whose minimal, Scandinavian-inspired style has helped her to gather over 159,000 followers on Instagram alone—she’s so successful that she even found herself on the Forbes Under 30 list! If you’re looking for unique street-style inspiration, Babba’s page is the perfect place to look. She effortlessly mixes casual outfits with bright colours, statement pieces and killer accessories that would look great on everyone. Alongside her fashion content, Babba is also the resident Eco Beauty Expert at Vogue Scandinavia and has gone on to launch her own clean haircare range, inspired by her Latinx heritage, called Ceremonia.",
            'image' => "blog1.webp",
            'created_at' =>now(),
        ]);
        DB::table('Blogs')->insert([
            'title' => "2. Catarina Mira Best Photography Fashion Blog",
            'description' => "Catarina Mira is a fashion influencer, originally born in Portugal, that made the move over to London to fulfil her creative ambitions and start her blog, Mira-Me. Mira-Me is a fashion blog with excellent visuals. Catarina is a talented photographer that captures her fashion in a moody and artistic style that sets her apart from other bloggers and helped her build a large base of loyal followers.",
            'image' => "blog2.webp",
            'created_at' =>now(),
        ]);
        DB::table('Blogs')->insert([
            'title' => "3. Eniswardrobe Best Petite Blogger",
            'description' => "ni is a petite fashion blogger based in the UK, originally born in Nigeria, who works as a blogger, YouTuber and stylist in London. Using fashion as a fun way to express her own personal style, Eni has created a platform where she produces stunning visuals and inspiring outfits that are easy for everyone to recreate. Her style mixes fun, vibrant prints with simple wardrobe basics, giving all of her readers the inspiration they need to elevate their day-to-day outfits with ease. With over 22,000 followers on Instagram alone, Eni has become one of the most-loved bloggers sharing style ideas for people with a petite body shape who may otherwise struggle to find clothing pieces that fit their body shape. Some of Eni’s most popular posts include her summer styling video which shares how to style the popular athleisure trend and her 4 all-black looks video which is perfect for those who love to sport a monochromatic look. You can find more of Eni’s content on her blog and Instagram.",
            'image' => "blog3.webp",
            'created_at' =>now(),
        ]);
        DB::table('Blogs')->insert([
            'title' => "4. Mercer 7 Best Blog for Capsule Wardrobes",
            'description' => "Mercer 7 is a blog founded by a New York fashion designer, stylist and creative director, Erna Leon. The blog and Erna are now based in London and can be described as a ‘curated womenswear concept and a collaborative lifestyle platform’. The blog is best known for helping its readers create their own capsule wardrobes, consisting of a limited amount of clothes that can be worn in a variety of ways. The blog is also a champion of slow fashion and investing in particular pieces that will last you throughout the seasons, rather than shopping for trendy items from fast fashion brands that won’t last long. Mercer 7’s style is very effortless and timeless that focuses on a ‘less is more’ approach when it comes to style. This means that all of the looks you find on the blog will be very easy to recreate and will, most importantly, not go out of style any time soon.",
            'image' => "blog4.webp",
            'created_at' =>now(),
        ]);
    }
}
