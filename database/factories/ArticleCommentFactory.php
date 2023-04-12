<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<ArticleComment>
 */
class ArticleCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'article_id' => Article::all()->unique()->id,
            'title' => $this->faker->text(30),
            'content' => $this->faker->text(),
        ];
    }
}
