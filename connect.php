<?php

require "vendor/autoload.php";

// Use the correct namespace and class name for the Supabase PHP SDK
use PHPSupabase\Service;

$supabaseUrl = 'https://nmiwzrpxkoetswthjqjx.supabase.co';
$supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im5taXd6cnB4a29ldHN3dGhqcWp4Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTc2MTcwNDksImV4cCI6MjA3MzE5MzA0OX0.8JBb9HWqP2T-RKHnHANve0fOeZsV5nR5ykPFhgMRcXw';

// Instantiate the Supabase client using the PHPSupabase\Service class
$client = new Service($supabaseKey, $supabaseUrl);


?>