<?php
header("Content-Type: application/json");




$envPath = "../.env";

if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($key, $value) = explode('=', $line, 2);
        $_ENV[$key] = $value;
        putenv("$key=$value");
    }
} else {
    echo "ENV missing";
    exit();
}



$OPENAI_API_KEY = getenv("OPENAI_API_KEY");

if (!$OPENAI_API_KEY) {
    echo json_encode(["error" => "API key not found"]);
    exit;
}


/*
echo json_encode([
  "status" => "API reachable",
  "key_loaded" => $OPENAI_API_KEY ? "YES" : "NO"
]);
exit;*/















































// Read JSON input
$input = json_decode(file_get_contents("php://input"), true);
$userMessage = trim($input["message"] ?? "");

if (!$userMessage) {
    echo json_encode(["error" => "Empty message"]);
    exit;
}

// OpenAI API request
$data = [
    "model" => "gpt-4.1-mini",
    "messages" => [
        ["role" => "system", "content" => "You are a helpful website assistant."],
        ["role" => "user", "content" => $userMessage]
    ],
    "temperature" => 0.7
];

$ch = curl_init("https://api.openai.com/v1/chat/completions");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Bearer $OPENAI_API_KEY"
    ],
    CURLOPT_POSTFIELDS => json_encode($data)
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(["error" => "Request failed"]);
    curl_close($ch);
    exit;
}

curl_close($ch);

$result = json_decode($response, true);
$reply = $result["choices"][0]["message"]["content"] ?? "No response";

echo json_encode([
    "reply" => trim($reply)
]);