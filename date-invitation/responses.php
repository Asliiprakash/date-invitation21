<?php

include "db.php";

$result = $conn->query(
    "SELECT * FROM responses ORDER BY response_time DESC"
);

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>My Responses 💌</title>

    <link rel="stylesheet"
          href="style.css">

</head>

<body>

<div class="container">

    <div class="card">

        <div class="heart">
            💌
        </div>

        <h1>
            Responses
        </h1>

        <p class="subtitle">
            Date invitation responses
        </p>


        <?php

        if ($result && $result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                $answer = $row["answer"];

                if ($answer === "Yes") {

                    $icon = "💖";

                } elseif ($answer === "Maybe") {

                    $icon = "😊";

                } else {

                    $icon = "🙈";

                }

        ?>

            <div class="response-box">

                <h2>

                    <?php echo $icon; ?>

                    <?php echo htmlspecialchars($answer); ?>

                </h2>

                <p>

                    Responded on:

                    <?php

                    echo htmlspecialchars(
                        $row["response_time"]
                    );

                    ?>

                </p>

            </div>

        <?php

            }

        } else {

        ?>

            <p class="message">

                No response yet... 🌸

            </p>

        <?php

        }

        ?>

    </div>

</div>

</body>

</html>

<?php

$conn->close();

?>