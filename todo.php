<?php
// <!-- Building a Todo List in PHP
// Now that we have a good understanding of arrays, the command line, checking user input, and control structures, it is time to build an application that we'll be revisiting through-out the course.

// A Todo List

// The Specs

// The application should run on command line, should prompt users to add new items, allow them to add text items, and the ability to remove completed items.

// After each action, it should display the todo list and the menu.

// The Code

// Together we've built the basic application with the following code (or very similar):

// Most of this code should be very familiar by now, but we have introduced a few new items.

// trim() removed whitespace and special characters from strings. See the PHP man page for trim().

// We used a do/while instead of another control structure. This allowed us to enter our loop, and pause at the user input area until the user decides to (Q)uit.

// We used unset() to remove array elements. See the PHP man page for unset().

// Exercises

// Create a new directory in your vagrant-lamp directory named todo_list with a file named todo.php containing the code above. Use git init to initialize a new local repository in that directory and commit your code. Create a new remote repository on GitHub called CLI_Todo_List and add the remote to your local repository so you can push your code.

// After each exercise item, commit and push changes to your GitHub repository.

// Update the code to allow upper and lowercase inputs from user for all menu items. Test adding, removing, and quitting.

// Update the program to start numbering the list with 1 instead of 0. Make sure remove still works as expected. -->

// Create array to hold list of todo items
$items = array();

// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = trim(fgets(STDIN));

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
