<?php

namespace App\Helpers;

class SecurityQuestions
{
    /**
     * Array of security questions and their answers
     */
    public static $questions = [
        [
            'question' => 'What is 5 + 3?',
            'answer' => '8'
        ],
        [
            'question' => 'What is 12 + 8?',
            'answer' => '20'
        ],
        [
            'question' => 'What is 7 + 6?',
            'answer' => '13'
        ],
        [
            'question' => 'What is 15 + 9?',
            'answer' => '24'
        ],
        [
            'question' => 'What is 11 + 4?',
            'answer' => '15'
        ],
        [
            'question' => 'What is 8 + 7?',
            'answer' => '15'
        ],
        [
            'question' => 'What is 19 + 6?',
            'answer' => '25'
        ],
        [
            'question' => 'What is 14 + 5?',
            'answer' => '19'
        ],
        [
            'question' => 'What is 9 + 11?',
            'answer' => '20'
        ],
        [
            'question' => 'What is 6 + 9?',
            'answer' => '15'
        ],
        [
            'question' => 'What is 13 + 7?',
            'answer' => '20'
        ],
        [
            'question' => 'What is 10 + 5?',
            'answer' => '15'
        ]
    ];

    /**
     * Get a random question
     */
    public static function getRandomQuestion()
    {
        $index = array_rand(self::$questions);
        return [
            'index' => $index,
            'question' => self::$questions[$index]['question']
        ];
    }

    /**
     * Verify an answer
     */
    public static function verifyAnswer($index, $userAnswer)
    {
        if (!isset(self::$questions[$index])) {
            return false;
        }

        $correctAnswer = self::$questions[$index]['answer'];
        // Case-insensitive comparison, trim whitespace
        return strtoupper(trim($userAnswer)) === strtoupper(trim($correctAnswer));
    }
}
