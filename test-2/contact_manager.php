<?php
$contact1_name = "";
$contact1_phone = "";
$contact2_name = "";
$contact2_phone = "";

while (true) {
    echo "\nContact Management App\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Enter your choice (1/2/3): ";
    $choice = trim(fgets(STDIN));

    if ($choice === "1") {
        if ($contact1_name !== "" && $contact2_name !== "") {
            echo "⚠️  Cannot add more than 2 contacts.\n";
        } else {
            echo "Enter contact name: ";
            $name = trim(fgets(STDIN));
            echo "Enter phone number: ";
            $phone = trim(fgets(STDIN));

            if ($contact1_name === "") {
                $contact1_name = $name;
                $contact1_phone = $phone;
                echo "✅ Contact 1 saved.\n";
            } elseif ($contact2_name === "") {
                $contact2_name = $name;
                $contact2_phone = $phone;
                echo "✅ Contact 2 saved.\n";
            }
        }
    } elseif ($choice === "2") {
        echo "\nSaved Contacts:\n";
        if ($contact1_name !== "") {
            echo "1. $contact1_name - $contact1_phone\n";
        }
        if ($contact2_name !== "") {
            echo "2. $contact2_name - $contact2_phone\n";
        }
        if ($contact1_name === "" && $contact2_name === "") {
            echo "No contacts saved yet.\n";
        }
    } elseif ($choice === "3") {
        echo "👋 Exiting Contact Management App assignment from Ostad. Goodbye shakur Bhai!\n";
        break;
    } else {
        echo "Invalid choice. Please enter 1, 2, or 3.\n";
    }
}
