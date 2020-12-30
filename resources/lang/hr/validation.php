<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "Morate potvrditi :attribute kako bi nastavili.",
	"active_url"           => "Uneseni :attribute nije pravilan URL.",
	"after"                => "Uneseni :attribute mora biti datum nakon :date.",
	"alpha"                => ":attribute se može sastojati samo od slova.",
	"alpha_dash"           => ":attribute se može sastojati samo od slova, brojeva i povlaka.",
	"alpha_num"            => ":attribute se može sastojati samo od slova i brojeva.",
	"array"                => ":attribute mora biti polje.",
	"before"               => ":attribute mora sadržavati datum prije :date.",
	"between"              => array(
		"numeric" => "Broj :attribute mora biti između :min i :max.",
		"file"    => "Datoteka :attribute mora biti između :min i :max kilobajta u veličini.",
		"string"  => ":attribute mora sadržavati između :min i :max slova.",
		"array"   => "Polje :attribute mora sadržavati između :min i :max objekata.",
	),
	"boolean"              => ":attribute mora biti istina ili laž.",
	"confirmed"            => "Potvrda unosa :attribute nije točna.",
	"date"                 => "Uneseni :attribute nije pravilan datum.",
	"date_format"          => "Uneseni :attribute ne odgovara pravilnom formatu :format.",
	"different"            => ":attribute i :other moraju se razlikovati.",
	"digits"               => ":attribute mora sadržavati :digits znamenaka.",
	"digits_between"       => ":attribute mora sadržavati između :min i :max znamenaka.",
	"email"                => ":attribute mora biti pravilna e-mail adresa.",
	"exists"               => "Odabrani :attribute nije pravilan.",
	"image"                => ":attribute mora biti slika.",
	"in"                   => "Odabrani :attribute nije dozvoljen.",
	"integer"              => ":attribute mora biti cijelobrojni broj.",
	"ip"                   => ":attribute mora biti pravilna IP adresa.",
	"max"                  => array(
		"numeric" => ":attribute nesmije biti veće od :max.",
		"file"    => "Datoteka :attribute nesmije biti veća od :max kilobajta.",
		"string"  => ":attribute nesmije sadržavati više od :max slova.",
		"array"   => "Polje :attribute nesmije sadržavati više od :max objekata.",
	),
	"mimes"                => ":attribute mora biti tipa: :values.",
	"min"                  => array(
		"numeric" => ":attribute mora biti veći od :min.",
		"file"    => "Datoteka :attribute mora biti veća od :min kilobajta.",
		"string"  => ":attribute mora sadržavati barem :min slova.",
		"array"   => "Polje :attribute mora sadržavati barem :min objekata.",
	),
	"not_in"               => "Odabrani :attribute nije dozvoljen.",
	"numeric"              => ":attribute mora sadržavati broj.",
	"regex"                => "Format :attribute nije točan.",
	"required"             => "Polje :attribute je obavezno.",
	"required_if"          => "Polje :attribute je obavezno kada je :other :value.",
	"required_with"        => "Polje :attribute je obavezno kada su :values prisutni.",
	"required_with_all"    => "Polje :attribute je obavezno kada su :values prisutni.",
	"required_without"     => "Polje :attribute je obavezno kada :values nisu prisutni.",
	"required_without_all" => "Polje :attribute je obavezno kad nijedan od :values nisu prisutni.",
	"same"                 => "Sadržaji polja :attribute i :other moraju biti isti.",
	"size"                 => array(
		"numeric" => ":attribute mora sadržavati :size znamenaka.",
		"file"    => "Datoteka :attribute mora biti :size kilobajta u veličini.",
		"string"  => ":attribute mora sadržavati :size slova.",
		"array"   => "Polje :attribute mora sadržavati :size objekata.",
	),
	"unique"               => "Uneseno :attribute je već zauzeto.",
	"url"                  => "Uneseni :attribute nije pravilnog formata.",
	"timezone"             => ":attribute nije pravilna vremenska zona.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);