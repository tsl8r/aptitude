<?php
include_once '../includes/global.php';
echo 'Please choose a subject to input content for:';
echo '<br/>';
echo '<br/>';
echo '<h1>Math 1050</h1>';
echo '<a href="'.$_SERVER['DOCUMENT_ROOT'].'inputtingContent/class.ChapterSectionAdmin.php?subject=math">Chapter and Section Administration</a>';
echo '<br/>';
echo '<a href="'.$_SERVER['DOCUMENT_ROOT'].'inputtingContent/class.ContentAdmin.php?subject=math">Content Editing & Tagging</a>';
