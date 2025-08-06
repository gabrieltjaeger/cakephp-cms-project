<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'title' => 'First Article',
                'slug' => 'first-article',
                'body' => 'This is the content of the first article.',
                'published' => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 1,
                'title' => 'Second Article',
                'slug' => 'second-article',
                'body' => 'This is the content of the second article.',
                'published' => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 1,
                'title' => 'Third Article',
                'slug' => 'third-article',
                'body' => 'This is the content of the third article.',
                'published' => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
