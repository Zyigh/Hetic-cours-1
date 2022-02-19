<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap.css">
    <script type="application/javascript" src="/assets/bootstrap/popper.js"></script>
    <script type="application/javascript" src="/assets/bootstrap/bootstrap.js"></script>
</head>
<body>
<main class="container">
    <form action="/numbers/results.php" method="post" class="bg-light p-5 w-75 mx-auto mt-4">
        <h1>Add numbers</h1>
        <div id="wrapper">
            <div class="my-4">
                <input type="number" class="form-control" name="nums[]" placeholder="Pick a number" required="required">
            </div>
        </div>
        <div class="d-flex justify-content-around">
            <button id="input-adder" class="btn btn-primary px-4" type="button">Add input</button>
            <button class="btn btn-success px-4" type="submit">Compute</button>
        </div>
    </form>
</main>
<script type="application/javascript">
    const wrapper = document.getElementById('wrapper');
    const inputAdder = document.getElementById('input-adder');
    const addInput = () => {
        const marginer = document.createElement('div');
        marginer.classList.add('my-4');
        const input = document.createElement('input');
        input.setAttribute('type', 'number');
        input.setAttribute('name', 'nums[]');
        input.setAttribute('placeholder', 'Pick a number');
        input.setAttribute('required', 'required');
        input.classList.add('form-control');

        marginer.appendChild(input);
        wrapper.appendChild(marginer);
    }

    inputAdder.addEventListener('click', addInput);
</script>
</body>
</html>
