<?php

namespace App\Controllers\Pages;

use App\controllers\BaseController;

class ci4Controller extends BaseController
{
    private $navigation = [
        'bab1' => [
            'sub1' => 1,
            'sub2' => 2,
            'sub3' => 3,
            'sub4' => 4,
            'sub5' => 5,
            'sub6' => 6,
            'sub7' => 7,
            'sub8' => 8
        ],
        'bab2' => [
            'sub1' => 1,
            'sub2' => 2,
            'sub3' => 3,
            'sub4' => 4,
            'sub5' => 5
        ]
    ];

    private function renderView(string $viewPath, string $nextSlug = null): string
    {
        $data = [
            'tittle' => 'CodeIgniter 4',
            'navbar' => 'navbar2',
            'nextSlug' => $nextSlug // Pass the next slug to the view
        ];
        return view($viewPath, $data);
    }

    public function viewBab(string $babSlug, string $subSlug): string
    {
        $viewPath = "main\\ci4\\{$babSlug}\\{$subSlug}"; // Ensure this matches your view filenames

        // Determine the next view path
        $nextSlug = $this->getNextSlug($babSlug, $subSlug);

        return $this->renderView($viewPath, $nextSlug);
    }

    private function getNextSlug(string $babSlug, string $subSlug): ?string
    {
        if (isset($this->navigation[$babSlug]) && isset($this->navigation[$babSlug][$subSlug])) {
            $subIndex = $this->navigation[$babSlug][$subSlug];

            // Check if there is a next sub-page in the current bab
            if ($subIndex < count($this->navigation[$babSlug])) {
                $nextSubIndex = $subIndex + 1;
                $nextSubSlug = array_search($nextSubIndex, $this->navigation[$babSlug]);
                return base_url("ci4/{$babSlug}/{$nextSubSlug}");
            }

            // Check if there is a next bab
            $babKeys = array_keys($this->navigation);
            $currentBabIndex = array_search($babSlug, $babKeys);
            if ($currentBabIndex !== false && $currentBabIndex < count($babKeys) - 1) {
                $nextBabSlug = $babKeys[$currentBabIndex + 1];
                $nextSubSlug = array_search(1, $this->navigation[$nextBabSlug]);
                return base_url("ci4/{$nextBabSlug}/{$nextSubSlug}");
            }
        }

        return null; // No next page available
    }
}
