<?php

/**
 * One to one
 */

Route::get('one-to-one', 'OneToOneController@oneToOne');
Route::get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
Route::get('one-to-one-insert', 'OneToOneController@oneToOneInsert');

/**
 * One to Many
 */
Route::get('one-to-many', 'OneToManyController@oneToMany');
Route::get('many-to-one', 'OneToManyController@manyToOne');
Route::get('one-to-many-two', 'OneToManyController@oneToManyTwo');

Route::get('one-to-many-insert', 'OneToManyController@oneToManyInsert');
Route::get('one-to-many-insert-two', 'OneToManyController@oneToManyInsertTwo');

/**
 * Has Many Through
 */
Route::get('has-many-through','OneToManyController@hasManyThrough');

/**
 * Many to Many
 */
Route::get('many-to-many','ManyToManyController@manyToMany');
Route::get('many-to-many-inverse','ManyToManyController@manyToManyInverse');
Route::get('many-to-many-insert','ManyToManyController@manyToManyInsert');

/* 
*Relation Polymorphic
*/
Route::get('polymorphics','PolymorphicController@polymorphic');
Route::get('polymorphics-insert','PolymorphicController@polymorphicInsert');



Route::get('/', function () {
    return view('welcome');
});
