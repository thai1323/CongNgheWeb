<?php

$filename = __DIR__ . "/Quiz.txt";


if (!file_exists($filename)) {
    die("Không tìm thấy tệp Quiz.txt trong thư mục hiện tại.");
}


$raw = file_get_contents($filename);


$blocks = preg_split("/\n\s*\n/", trim($raw));

$questions = [];

foreach ($blocks as $block) {
    $lines = explode("\n", trim($block));


    $q = array_shift($lines);

    $choices = [];
    $answer = "";

    foreach ($lines as $line) {
        $line = trim($line);

        if (str_starts_with($line, "ANSWER")) {
            $answer = trim(explode(":", $line)[1]);
        } else {
            $choices[] = $line;
        }
    }

    $questions[] = [
        "question" => $q,
        "choices"  => $choices,
        "answer"   => $answer
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trắc nghiệm</title>
    <style>
        body { font-family: Arial; width: 900px; margin: auto; }
        .question { margin-bottom: 25px; padding: 10px; border-bottom: 1px solid #ccc; }
        .question p { font-size: 20px; color: blue; }
        button { padding: 10px 20px; font-size: 16px; }
    </style>
</head>
<body>

<h1>40 Bài trắc nghiệm</h1>

<form action="result.php" method="POST">
    <?php foreach ($questions as $key => $q): ?>
    <div class="question">
        <p><b><?= $key + 1 ?>. <?= $q["question"] ?></b></p>

        <?php foreach ($q["choices"] as $c): ?>
            <label>
                <input type="radio" name="answer<?= $key ?>" value="<?= substr($c, 0, 1) ?>">
                <?= $c ?>
            </label><br>
        <?php endforeach; ?>

        <input type="hidden" name="correct<?= $key ?>" value="<?= $q["answer"] ?>">
    </div>
    <?php endforeach; ?>

    <button type="submit">Submit</button>
</form>

</body>
</html>
