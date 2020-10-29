<?php
/**
 * This file is just a proof of concept(poc) file.
 * I will be removing code from here and putting it into more appropriate places (like classes)
 * as I go along.
 */

/**
 * Set the url for testing.
 * In future, perhaps make it read values from a csv?
 */
//$url = "https://runescape.wiki/w/Noxious_scythe";
$url = "https://runescape.wiki/w/Super_attack#(4)";

// Get the source HTML of the page.
$page = file_get_contents($url);

// Turn the page into a DOM so I can parse it easily.
$doc = new DOMDocument();

// This thing throws unmeaningful, useless warnings. Suppress them.
@$doc->loadHTML($page);

// Instantiate XPath to query the DOM.
$xpath = new DOMXpath($doc);
$results = $xpath->query('//span[@class="infobox-quantity"]');

// DOMNodeLIst implements Traversable so use foreach to iterate.
foreach ($results as $result) {

	// Get the value of x attribute for the result.
	var_dump($result->getAttribute("data-val-each"));
	
}
