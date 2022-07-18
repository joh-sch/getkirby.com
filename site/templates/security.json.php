<?php

$idFilter = function ($entry) {
    $entry = $entry->toArray();
    unset($entry['id']);

    return $entry;
};

$data = [
    'latest'    => $kirby->version(),
    'versions'  => array_values($page->versions()->toArray($idFilter)),
    'incidents' => array_values($page->incidents()->toArray($idFilter)),
    'messages'  => array_values($page->messages()->toArray($idFilter))
];

echo json($data);
