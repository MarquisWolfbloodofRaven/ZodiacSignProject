<?php include('layouts/header.php'); ?>

<h2 class="text-center">Descubra seu Signo</h2>
<form id="signo-form" method="POST" action="show_zodiac_sign.php">
    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
        <input type="date" class="form-control" name="data_nascimento" required>
    </div>
    <button type="submit" class="btn btn-primary">Consultar Signo</button>
</form>

</div> <!-- Fecha container do header -->
</body>
</html>
