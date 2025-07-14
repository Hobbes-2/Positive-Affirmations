<?php
    //Includes mysql database file
    // include("database.php");

    // $email = "Aperson@gmail.com";
    // $name = "John Herson";

    //  $sql = "INSERT INTO users (email, name)
    //          VALUES ('$email', '$name')";
    // try{
    //     mysqli_query($conn, $sql);
    //     echo "User added" . "<br>";
    // }
    // catch(mysqli_sql_exception)
    // {
    //     echo "User not added" . "<br>";
    // }

    // $sql = "SELECT * FROM users";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0)
    // {
    //     while($row = mysqli_fetch_assoc($result))
    //     {
    //         echo $row["id"] . "<br>";
    //         echo $row["name"] . "<br>";
    //         echo $row["email"] . "<br>";
    //         echo $row["register_date"] . "<br>";
    //     };
    // }
    // else
    // {
    //     echo "No user found";
    // }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .wrapper 
    {
        text-align: center;
    }

    .button 
    {
        top: 50%;
    }

    @font-face {
   font-family: myFirstFont;
   src: url(sansation_light.woff);
    }

    *{
   font-family: myFirstFont;
    }


</style>
</head>
<body style = background-color:#006A4E>
<form action = "<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "post">

    <h1 class = "wrapper">
    Welcome to Positive Affermations!
    </h1>

    <br>
    <br>
    <div class="wrapper">
    <button class="button">Click for a positive</button>
    </div>
    <br>
    <br>


</form>
</body>
</html>

<?php
    //Prints the get that we called earlier
    //Get is technically an array (in this case holds username and password)
    //{} inside of "" make you able to add a <br> like so

    //Get is not secure, better for a search page, GET requests can be cached
    //Post is more secure, not data limit, cannot be cached, better for submiting stuff like passwords or credentials

    //Filters our special characters that are not on the native keyboard


    //This is the list of phrases that would be printed
    $phraseList = ["You are enough, just as you are.",
"Today is a fresh start — make the most of it.",
"You bring value to this world.",
"One step at a time is still progress.",
"You have overcome so much — keep going.",
"Your kindness makes a difference.",
"The world is better with you in it.",
"Mistakes are part of learning. Keep trying.",
"You are stronger than you think.",
"Your efforts matter, even when they go unseen.",
"Every day is a new opportunity to grow.",
"You are allowed to rest.",
"Believe in your ability to overcome.",
"You bring light to those around you.",
"Small victories are still victories.",
"You have the power to choose your response.",
"It’s okay to have a bad day.",
"You are doing your best, and that’s enough.",
"There is hope in every sunrise.",
"You have a unique gift to offer the world.",
"Be proud of how far you've come.",
"Your journey is your own — and that’s beautiful.",
"You matter more than you know.",
"You can handle what’s in front of you.",
"Keep your heart open — good things are coming.",
"You inspire others more than you realize.",
"Bravery looks different every day.",
"You deserve kindness — from yourself too.",
"Progress, not perfection.",
"You have permission to take up space.",
"There’s power in your presence.",
"You’re allowed to change your mind.",
"Growth takes time — and you’re doing it.",
"Every emotion is valid.",
"You’re learning every day.",
"Someone is grateful for you today.",
"Your story isn’t over yet.",
"You’re doing the best you can with what you have.",
"Challenges don’t define you — your courage does.",
"You are not alone.",
"You radiate potential.",
"You have so much to offer.",
"Be gentle with yourself today.",
"It’s okay to ask for help.",
"The smallest steps can lead to big changes.",
"You have permission to feel joy.",
"There’s strength in vulnerability.",
"Your dreams are valid.",
"You are growing through what you’re going through.",
"Be proud of your resilience.",
"You are more than your worries.",
"Keep going — you’re doing better than you think.",
"Rest is productive too.",
"Trust your inner voice.",
"You are enough, even on your worst days.",
"You light up someone’s world.",
"There is beauty in simplicity.",
"You are worthy of love and respect.",
"It's okay to not have all the answers.",
"Take time to celebrate yourself today.",
"The effort you put in counts.",
"Your life has meaning.",
"You’re not behind — you’re on your own timeline.",
"Your potential is limitless.",
"You have the power to create change.",
"You are not your past.",
"You’ve survived 100% of your worst days.",
"You’re more capable than you know.",
"Keep showing up — it matters.",
"You are more than enough.",
"You have a good heart.",
"You bring value just by being you.",
"It’s okay to pause.",
"Your presence is appreciated.",
"Let yourself feel proud.",
"You’re worthy of peace.",
"Believe in your unique journey.",
"You’re doing a great job.",
"You have the power to choose joy.",
"There’s something good waiting for you.",
"Let your light shine — it’s needed.",
"It’s okay to be a work in progress.",
"You are loved — just as you are.",
"Keep being you — it's powerful.",
"Every day is a chance to start anew.",
"You make a difference.",
"You have grown so much.",
"Stay true to yourself.",
"Your kindness has impact.",
"You are allowed to dream big.",
"You are more than your fears.",
"You're worthy of good things.",
"You're creating your own path.",
"You don’t have to do it all today.",
"You can rise from anything.",
"Breathe — you’ve got this.",
"You bring joy to others.",
"You deserve your own compassion.",
"You are not a burden.",
"Your light is needed in this world.",
"You’re learning to thrive, not just survive.",
"Every moment is a chance to grow.",
"You’re allowed to feel everything.",
"What you do matters.",
"You are doing meaningful work — even if it feels small.",
"Let yourself be proud of today.",
"You are more than your productivity.",
"You have so much to be proud of.",
"You’re part of something bigger.",
"You’re allowed to rest without guilt.",
"Your existence brings value.",
"You are part of the solution.",
"You’ve got what it takes.",
"There is beauty in who you are.",
"You are enough. Right now. Always.",
"Every effort counts.",
"Your peace matters.",
"Your dreams are worth chasing.",
"You are worth investing in.",
"You’ve already made a difference today.",
"Your happiness matters.",
"Your voice deserves to be heard.",
"You are safe to be yourself.",
"You are already whole.",
"You can create something amazing.",
"You are light in someone’s darkness.",
"You can make today beautiful.",
"You are someone’s reason to smile.",
"Trust your journey.",
"You radiate warmth.",
"You are doing great work — by being kind.",
"You’re doing better than you think.",
"You're not too late or too early.",
"You deserve peace in your heart.",
"You are valued beyond measure.",
"You’re building something meaningful.",
"Your journey inspires others.",
"You can begin again — anytime.",
"The world needs your story.",
"You are not defined by your mistakes.",
"You have incredible strength.",
"You’ve grown in ways you can’t even see.",
"Keep nurturing your spirit.",
"You are worthy of good friendships.",
"It’s okay to be soft in a hard world.",
"You are more powerful than your doubts.",
"You are love in motion.",
"The best is yet to come.",
"Keep showing up for yourself.",
"You are worthy of healing.",
"You’re allowed to outgrow things.",
"You are becoming who you’re meant to be.",
"You are magic in human form.",
"You matter — deeply.",
"You bring hope.",
"You are doing something brave every day.",
"You are not alone in your struggles.",
"You are part of a bigger story.",
"You’ve already made progress.",
"You have so much to offer this world.",
"You are beautifully human.",
"You are not too much.",
"You can find peace within.",
"You can always choose love.",
"You are brave for trying.",
"You’re worthy of joy.",
"There’s always room to grow.",
"You are not your mistakes.",
"You deserve rest and joy.",
"You’re planting seeds of greatness.",
"You’re becoming more you every day.",
"You have a heart full of gold.",
"You are creating something special.",
"You bring beauty to ordinary moments.",
"You are not invisible — you are seen.",
"Your softness is a strength.",
"You are more than what you do.",
"You bring something no one else can.",
"You are safe here.",
"You are allowed to be happy.",
"You’re doing the hard work — keep going.",
"You are grounded, growing, glowing.",
"Your care is contagious.",
"You are a blessing.",
"You are evolving beautifully.",
"You can start fresh any day.",
"Your truth matters.",
"You are courageous.",
"You are supported.",
"Keep being curious.",
"You shine with authenticity.",
"You are worthy of being heard.",
"You are held in love.",
"You are enough even when you rest.",
"You bring joy just by being you.",
"You are full of possibilities.",
"Keep showing up. It matters.",
"You deserve to feel whole.",
"You’re already making waves.",
"Your existence is a miracle.",
"You are capable of finding peace.",
"You are here for a reason.",
"You make the world brighter.",
"You are meant to be seen.",
"You’re worthy, even when it’s hard to believe.",
"Your dreams are still alive.",
"You have everything you need inside you.",
"You are held by the universe.",
"You are worthy of deep joy.",
"You are a light in this world.",
"You are deeply loved.",
"You are making progress.",
"Keep going, even if it's slow.",
"Your healing matters.",
"You are not a problem to fix.",
"You are becoming your true self.",
"You deserve to feel seen.",
"Your gentleness is powerful.",
"You are making space for joy.",
"You are not forgotten.",
"You belong here.",
"Your dreams are still possible.",
"You are resilient beyond measure.",
"You are doing meaningful work.",
"You are deeply important.",
"You are someone’s sunshine.",
"You are building a life that fits you.",
"You are never truly alone.",
"Your soul shines through.",
"You are already worthy.",
"You are doing brave things.",
"You deserve to feel free.",
"You are lovable exactly as you are.",
"Your light is real.",
"You are more than your titles.",
"You are becoming a new version of you.",
"Your dreams are sacred.",
"You are growing roots and wings.",
"You are an answer to someone’s prayer.",
"You are doing better than you feel.",
"You are doing great.",
"You bring light wherever you go.",
"You are the author of your story.",
"You are worthy of tenderness.",
"You are worthy of starting again.",
"You are more than the noise.",
"You are safe to shine.",
"You are holding it together with grace.",
"You are allowed to feel peace.",
"You are not broken.",
"You bring meaning just by being here.",
"You are the calm in someone’s storm.",
"You are golden inside.",
"You are a masterpiece in progress.",
"You are worthy of taking up space.",
"You are not lost — you’re just becoming.",
"You are always enough.",
"You are capable of joy again.",
"You are blooming, even when it’s unseen.",
"You are destined for beautiful things.",
"You are worthy of your own love.",
"You are powerful beyond words.",
"You are welcome here.",
"You are light — never forget that.",
"You are love in motion.",
"You are worth celebrating.",
"You are already doing something incredible.",
"You are meant to thrive.",
"You are worthy of grace.",
"You are safe in your becoming.",
"You are allowed to take your time.",
"You are always growing.",
"You are love.",
"You are important here.",
"You are divine just as you are.",
"You are doing something beautiful with your life.",
"You are rewriting the rules.",
"You are sacred in your struggle.",
"You are becoming the person you needed.",
"You are still learning, and that’s beautiful.",
"You are walking through fire — and rising.",
"You are cherished.",
"You are a quiet miracle.",
"You are radiant.",
"You are safe to let go.",
"You are still worthy — no matter what.",
"You are a light in dark places.",
"You are worth waiting for.",
"You are doing the inner work.",
"You are golden at your core.",
"You are healing every day.",
"You are brilliant in your own way.",
"You are enough without doing anything.",
"You are a soul worth knowing.",
"You are making your way home.",
"You are a gift to this world.",
"You are courageous in your softness.",
"You are gentle power.",
"You are a source of calm.",
"You are doing sacred work.",
"You are deeply needed.",
"You are stardust and soul.",
"You are welcome to be imperfect.",
"You are making beauty from struggle.",
"You are rooted and rising.",
"You are loved beyond measure.",
"You are full of wonder.",
"You are rewriting your story.",
"You are not behind.",
"You are growing into light.",
"You are already whole.",
"You are making a difference — today.",
"You are showing up, and that matters.",
"You are infinite possibility.",
"You are full of life.",
"You are changing lives — quietly.",
"You are light wrapped in skin.",
"You are worthy of your own voice.",
"You are safe to speak your truth.",
"You are luminous.",
"You are still blooming.",
"You are a gentle revolution.",
"You are a spark of the divine.",
"You are becoming all you’re meant to be.",
"You are a living blessing.",
"You are a force for good.",
"You are sacred, always.",
"You are a breath of fresh air.",
"You are free to live your truth.",
"You are worth the effort.",
"You are someone's reason to believe.",
"You are the calm in the chaos.",
"You are infinite love.",
"You are the hope you’ve been waiting for.",
"You are a masterpiece in motion.",
"You are brave — just by being here.",
"You are worthy of softness.",
"You are made of resilience.",
"You are allowed to start over.",
"You are courage wrapped in skin.",
"You are shaping the future.",
"You are allowed to shine.",
"You are a lighthouse for others.",
"You are extraordinary in your being.",
"You are an answered prayer.",
"You are a sacred light.",
"You are fully human — and that’s beautiful.",
"You are doing holy work.",
"You are deeply enough.",
"You are magic walking.",
"You are peace in human form.",
"You are your ancestors’ wildest dream.",
"You are becoming light.",
"You are someone worth knowing.",
"You are a soul worth loving.",
"You are rising stronger.",
"You are worthy of rest and celebration.",
"You are not too late.",
"You are light and strength combined.",
"You are the miracle.",
"You are someone’s favorite part of the day.",
"You are a warm embrace in words.",
"You are sacred ground.",
"You are the sunrise after the storm.",
"You are proof that healing is possible.",
"You’re the only you — and that’s your power.",

];


    //Chooses a random of the phraseList array and sets randomKeys to that
    $randomKeys = array_rand($phraseList);
    //Now also chooses a random
    $randomString = $phraseList[$randomKeys];

    //Prints the name, a comma, and then the phrase


    
    echo "<div class='wrapper'> $randomString </div>";




    // mail(
    // $to,
    // $subject,
    // $message,
    // $additional_headers = [],
    // $additional_params = ""
    // );


    //Ends the connection to the database
    // mysqli_close($conn);
?>
