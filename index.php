<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = ($num2 != 0) ? $num1 / $num2 : 'Error: Division by zero';
                break;
            default:
                $result = 'Invalid Operator';
        }
    } else {
        $result = 'Invalid Input';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card p-5" style="width: 650px;">
            <h2 class="text-center">Kalkulator Sederhana</h2>
            <form method="post">
                <div class="mb-2">
                    <input type="text" name="num1" class="form-control form-control-sm" placeholder="Angka Pertama" required>
                </div>
                <div class="mb-2">
                    <select name="operator" class="form-select form-select-sm" required>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </div>
                <div class="mb-2">
                    <input type="text" name="num2" class="form-control form-control-sm" placeholder="Angka Kedua" required>
                </div>
                <button type="submit" class="btn btn-secondary btn-sm w-100">Hitung</button>
            </form>
            <?php if (isset($result)) { ?>
                <div class="alert alert-info mt-2 p-1 text-center">Hasil: <?php echo $result; ?></div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
