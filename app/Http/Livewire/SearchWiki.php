<?php

class WikiSearch extends Livewire\Component
{
    /* rendering the wikisearch part */
    public function render()
    {
        return view('livewire.wikisearch.index');
    }
    /* showing the searched name information */
    public function showWikis($name) {
        $data = file_get_contents('data.json');
        $json = json_decode($data, true);

        foreach ($json['cargoquery'] as $item) {
            if ($item['title']['Name'] == $name) {
                $country = $item['title']['Country'] ?? 'N/A';
                $team = $item['title']['Team'] ?? 'N/A';
                $role = $item['title']['Role'] ?? 'N/A';

                $html = '<div class="profile">';
                $html .= '<h2>' . $name . '</h2>';
                $html .= '<p><strong>Country:</strong> ' . $country . '</p>';
                $html .= '<p><strong>Team:</strong> ' . $team . '</p>';
                $html .= '<p><strong>Role:</strong> ' . $role . '</p>';
                $html .= '</div>';

                return $html;
            }
        }

        return 'Profile not found.';
    }
}
