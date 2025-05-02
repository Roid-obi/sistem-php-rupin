<!DOCTYPE html>
<html>
<head>
    <title>Pilih Peran - RuPin</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .login-container { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #555; }
        select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #007bff; color: #fff; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Pilih Peran</h2>
        <form action="index.php?action=prosesLogin" method="post">
            <div class="form-group">
                <label for="role">Anda adalah:</label>
                <select id="role" name="role">
                    <option value="penyewa">Penyewa</option>
                    <option value="penyedia">Penyedia</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit">Lanjutkan</button>
        </form>
    </div>
</body>
</html>