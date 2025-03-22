<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class SearchController extends BaseController
{
    public function index()
    {
        $query = $this->request->getGet('q');
        
        // Sanitize the search query
        $query = esc($query);
        
        // If there's no search term, redirect back
        if (empty($query)) {
            return redirect()->back();
        }
        
        // This is where you would implement your actual search logic
        // For now, we'll just simulate some results
        $results = $this->simulateSearchResults($query);
        
        $data = [
            'pageTitle' => 'Search Results for: ' . $query,
            'query' => $query,
            'results' => $results,
            'total' => count($results)
        ];
        
        return view('frontend/search-results', $data);
    }
    
    /**
     * Simulate search results - in a real application, you would
     * query your database for actual content
     */
    private function simulateSearchResults($query)
    {
        // Lowercase the query for case-insensitive matching
        $query = strtolower($query);
        
        // Define sample content to search through
        $content = [
            [
                'title' => 'Exploring Albania',
                'excerpt' => 'Albania surprised me in ways I never expected. A country often overlooked by travelers turned out to be Europe\'s hidden gem.',
                'type' => 'travel',
                'date' => 'January 10, 2025',
                'url' => base_url('#travel')
            ],
            [
                'title' => 'Gwen\'s Fried Rice Special Recipe',
                'excerpt' => 'Nigerian fried rice has always been my go-to dish for every occasion. It\'s colorful, flavorful, and incredibly versatile.',
                'type' => 'recipe',
                'date' => 'February 14, 2025',
                'url' => base_url('#recipes')
            ],
            [
                'title' => 'Fun Activities To Do With Your Partner',
                'excerpt' => 'Keeping a relationship fresh and exciting is all about creating new memories together.',
                'type' => 'relationship',
                'date' => 'March 25, 2025',
                'url' => base_url('#relationships')
            ],
            [
                'title' => 'Nigerian Jollof Rice',
                'excerpt' => 'A flavorful one-pot rice dish that\'s perfect for any celebration or family dinner.',
                'type' => 'recipe',
                'date' => 'January 12, 2025',
                'url' => base_url('#recipes')
            ],
            [
                'title' => 'Red Velvet Cake',
                'excerpt' => 'This vibrant cake with cream cheese frosting is perfect for special occasions.',
                'type' => 'recipe',
                'date' => 'February 15, 2025',
                'url' => base_url('#recipes')
            ],
            [
                'title' => 'Nigerian Meat Pie',
                'excerpt' => 'Delicious pastry filled with seasoned meat and vegetables, perfect for snacks or lunch.',
                'type' => 'recipe',
                'date' => 'March 8, 2025',
                'url' => base_url('#recipes')
            ]
        ];
        
        // Filter content based on search query
        $results = [];
        foreach ($content as $item) {
            if (strpos(strtolower($item['title']), $query) !== false || 
                strpos(strtolower($item['excerpt']), $query) !== false || 
                strpos(strtolower($item['type']), $query) !== false) {
                $results[] = $item;
            }
        }
        
        return $results;
    }
}