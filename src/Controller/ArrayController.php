<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArrayController extends Controller
{
    /**
     * @Route("/array", name="array")
     */
    public function index()
    {
        // [Step 1] Write an array (pre PHP 5.4 style) with the values
        // 4, 7, 8, 1, 2, 5, 9, 10
        $arrayOld = '';
        // [Step 2] Write an array (post PHP 5.4 style) with the values
        // 7, 0, 10, 2, 4, 5, 6, 9, 1, 2
        $arrayNew = '';

        // [Step 6] Replace this part with text in array_poetry.txt
        $arrayObject = '';
        $arrayColor = '';
        // End Replacement

        // [Step 6a] Creates an array by using $arrayObject for keys and
        // $arrayColor for its values
        $arrayPoetry = '';

        // [Step 9] Fills an array with 5 entries of the value of 5, keys starting at 3
        $arrayGenerated = '';

        // [Step 18] Replace this part with text in array_keys.txt
        $arrayKeys = '';
        // End Replacement

        return $this->render('array/index.html.twig', [
            'arrayOld' => $arrayOld,
            'arrayNew' => $arrayNew,
            // [Step 3] Count the number of values (official) for arrayOld
            'arrayOldCount' => '',
            // [Step 4] Count the number of values
            // (using a alias of the official function) for arrayNew
            'arrayNewCount' => '',
            // [Step 4a] After finding the answer of 3 and 4, you can put
            // this at true to see an explanation.
            'arrayCountDesc' => false,
            // [Step 5] Merges the elements of $arrayOld and $arrayNew so that
            // the values of one are appended to the end of the previous one
            'arrayOldNew' => '',
            // [Step 5a] After finding the answer of 5, you can put
            // this at true to see an explanation.
            'arrayOldNewDesc' => false,
            // [Step 6] Look in previous part of the code
            // [Step 6a] Look in previous part of the code
            'arrayPoetry' => $arrayPoetry,
            // [Step 7] Compares $arrayOld against $arrayNew and returns the
            // values in $arrayOld that are not present in $arrayNew.
            'arrayOldNotInNew' => '',
            // [Step 7a] Compares $arrayNew against $arrayOld and returns the
            // values in $arrayNew that are not present in $arrayOld.
            'arrayNewNotInOld' => '',
            // [Step 8] Compares $arrayOld against $arrayNew and returns the
            // values in $arrayOld that are not present in $arrayNew.
            // Use the keys in the compare too
            'arrayOldNotInNewWithKey' => '',
            // [Step 8a] Compares $arrayNew against $arrayOld and returns the
            // values in $arrayNew that are not present in $arrayOld.
            // Use the keys in the compare too
            'arrayNewNotInOldWithKey' => '',
            // [Step 8b] Compares $arrayNew against $arrayOld and returns the
            // values in $arrayNew that are not present in $arrayOld.
            // Use the keys only to compare
            'arrayNewNotInOldOnKeys' => '',
            // [Step 8c] After finding the answer of 6, 6a, 7, 7a, 8, 8a and 8b,
            // you can put this at true to see an explanation.
            'arrayNotInDesc' => false,
            // [Step 9] Look in previous part of the code
            'arrayGenerated' => $arrayGenerated,
            // [Step 9a] Compares $arrayNew against $arrayGenerated and returns
            // the values in $arrayNew that are not present in $arrayGenerated.
            // Use the keys only to compare
            'arrayNewNotInGeneratedOnKeys' => '',
            // [Step 10] Returns an array containing all the values of $arrayOld
            // that are present in $arrayNew.
            'arrayOldInNew' => '',
            // [Step 10a] Returns an array containing all the values of
            // $arrayNew that are present in $arrayOld.
            'arrayNewInOld' => '',
            // [Step 11] Returns an array containing all the values of $arrayOld
            // that are present in $arrayNew. Use the keys in the compare too.
            'arrayOldInNewWithKey' => '',
            // [Step 11a] Returns an array containing all the values of
            // $arrayNew that are present in $arrayOld.
            // Use the keys in the compare too.
            'arrayNewInOldWithKey' => '',
            // [Step 12] Returns an array containing all the values of $arrayOld
            // that are present in $arrayNew. Use the keys only to compare.
            'arrayOldInNewOnKeys' => '',
            // [Step 12a] Returns an array containing all the values of
            // $arrayNew that are present in $arrayOld.
            // Use the keys only to compare.
            'arrayNewInOldOnKeys' => '',
            // [Step 12b] After finding the answer of 9, 9a, 10, 10a, 11, 11a,
            // 12 and 12a, you can put this at true to see an explanation.
            'arrayInDesc' => false,
            // [Step 13] Takes $arrayOld and returns a new array
            // without duplicate values.
            'arrayOldNoDuplicate' => '',
            // [Step 13a] After finding the answer of 13, you can put
            // this at true to see an explanation.
            'arrayNoDuplicateDesc' => false,
            // [Step 14] Fills an array with the value of 0,
            // using $arrayPoetry as keys.
            'arrayGeneratedColor' => '',
            // [Step 15] Fill $arrayOld to the length of $arrayNew with
            // 11 as a value. Keeping the old value in $arrayOld
            'arrayFillToSize' => '',
            // [Step 16] Generate an array with value from 4 to 17
            'arrayGeneratedUnits' => '',
            // [Step 16a] Generate an array with value from 0 to 100
            // incremented by 10
            'arrayGeneratedTens' => '',
            // [Step 16b] After finding the answer of 15, 16 and 16a, you can put
            // this at true to see an explanation.
            'arrayFillDesc' => false,
            // [Step 17] Takes $arrayOld and returns a new array with the
            // order of the elements reversed.
            'arrayTheOtherWay' => '',
            // [Step 18] Look in previous part of the code
            // [Step 18a] Takes $arrayPoetry and returns a new array with the
            // keys become values and values become keys.
            'arrayKeysValues' => '',
            // [Step 18b] After finding the answer of 17, 18 and 18a you can put
            // this at true to see an explanation.
            'arrayFlipFlopDesc' => false,
            // [Step 19] Checks if the 'thisPoem' key exists in the array
            // $arrayKeys
            'arrayKeyCheck' => '',
            // [Step 19a] Checks if the 'thisPoem' key is set in the array
            // $arrayKeys
            'arrayKeySet' => '',
            // [Step 19b] After finding the answer of 18 and 18a, you can put
            // this at true to see an explanation.
            'arrayKeyDesc' => false,
            // [Step 20] Checks if the 'Yellow' value exists in the array
            // $arrayPoetry
            'arrayFind' => '',
            // [Step 21] Return all the keys names from $arrayPoetry
            'arrayGetKeys' => '',
            // [Step 21a] Return all the keys names from $arrayPoetry
            'arrayGetValues' => '',
            // [Step 21b] After finding the answer of 20, 21 and 21a, you can put
            // this at true to see an explanation.
            'arrayKeysDesc' => false,
            // [Step 22] Add all the values of $arrayNew
            'arrayAddition' => '',
            // [Step 22a] Multiply all the values of $arrayOld
            'arrayMultiply' => '',
            // [Step 22b] After finding the answer of 22 and 22a, you can put
            // this at true to see an explanation.
            'arrayCalculusDesc' => false,
            // replace
        ]);
    }
}
