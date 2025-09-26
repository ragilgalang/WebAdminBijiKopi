<?php /** @var string|null $title */ ?>
<?php $title = $title ?? null; ?>
<?php /** @var \Illuminate\View\ComponentSlot $slot */ ?>
@include('layouts.app', ['title' => $title, 'slot' => $slot])


