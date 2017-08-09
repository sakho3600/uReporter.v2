<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $user_type = array('admin', 'reporter', 'reviewer', 'authority', 'publisher');

    return [
        'full_name' => $faker->name,
        'contact_number' => $faker->phoneNumber,
        'email_address' => $faker->freeEmail,
        'password' => bcrypt('123456'),
        'national_id_number' => $faker->creditCardNumber,
        'date_of_birth' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'occupation' => $faker->jobTitle,
        'designation' => $faker->jobTitle,
        'contact_address' => $faker->address,
        'user_type' => $user_type[rand(0, 4)],
    ];
});


$factory->define(App\Report::class, function (Faker\Generator $faker) {

    $crimeTypeList = array("Crime", "Dacoity", "Robbery", "Murder", "Riot", "Women and Child Repression", "Kidnapping",
        "Theft", "Narcotics", "Smuggling", "Other Crimes");

    $corruptionTypeList = array("Corruption", "Bribery", "Negligence to Duty", "Political Influence", "Money Laundering",
        "Embezzlement", "Cheating", "Blackmail", "Other Corruptions");

    $publicHassleTypeList = array("Public Hassle", "Solid Waste Management", "Roads and Footpaths", "Drainage", "Factories",
        "Health Issues", "Social Welfare Issues", "Other Public Hassles");

    $generalComplainTypeList = array("General Complain", "Human Rights Violation", "Public Harassment", "Other General Complains");

    $type_subtype = array($crimeTypeList, $corruptionTypeList, $publicHassleTypeList, $generalComplainTypeList);

    $selected = rand(0, 3);

    return [
        'report_type' => $type_subtype[$selected][0],
        'report_subtype' => $type_subtype[$selected][rand(1, count($type_subtype[$selected]) - 1)],
        'accused' => $faker->company,
        'responsible' => $faker->company,
        'date_and_time' => $faker->dateTimeThisYear,
        'incident_location' => $faker->address,
        'short_description' => $faker->realText(200, 2),
        'evidences' => strtotime($faker->dateTimeThisDecade->format('Y-m-d H:i:s')) . '.zip',
        //'reporter_id' => function () {
        //     return factory(App\User::class)->create()->id;
        // }
        'reporter_id' => rand(1, 36),

    ];
});

$factory->define(App\Opinion::class, function (Faker\Generator $faker) {
    return [
        'public_opinion' => $faker->realText(200, 2),
        'evidences' => strtotime($faker->dateTimeThisDecade->format('Y-m-d H:i:s')) . '.zip',
        'reporter_id' => rand(1, 46),
        //'reporter_id' => function () {
       //     return factory(App\User::class)->create()->id;
      //  },
        'report_id' => rand(1, 40),
       // 'report_id' => function () {
       //      return factory(App\Report::class)->create()->id;
        // }

    ];
});

