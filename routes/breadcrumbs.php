<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\Tema;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('temas', function (BreadcrumbTrail $trail) {
    $trail->push('Temas');
});

Breadcrumbs::for('showTema', function (BreadcrumbTrail $trail, Tema $tema) {
    $trail->parent('temas');
    $trail->push($tema->name);
});

Breadcrumbs::for('showExperi', function (BreadcrumbTrail $trail, Tema $tema, Tema $tema1) {
    $trail->parent('showTema', $tema);
    $trail->push($tema1->email);
});

/*, route('showTema', ['name' => $tema->name])
// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});*/