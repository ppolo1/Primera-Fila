package com.example.sprint2_adrian_adriana_daw;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    BdD bdd;

    EditText etMail, etContrasena;
    Button btIniciarSesion, btRegistro;

    ImageView imgLogo;






    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        bdd = new BdD(MainActivity.this);

        inicializarViews();

        btIniciarSesion.setOnClickListener(view -> loginCorrecto(etMail.getText().toString(), etContrasena.getText().toString()));

        btRegistro.setOnClickListener(v -> {
            Intent intent = new Intent(MainActivity.this, Registro.class);
            startActivity(intent);
        });

    }

    public void inicializarViews(){
        etMail = findViewById(R.id.etEmail);
        etContrasena = findViewById(R.id.etContrasena);
        btIniciarSesion = findViewById(R.id.btnAceptar);
        btRegistro = findViewById(R.id.btResgistro);
        imgLogo = findViewById(R.id.imgLogo);
        imgLogo.setImageResource(R.drawable.img_logo);

    }


    public void loginCorrecto(String email, String contrasena) {
        if (email != null && !email.isEmpty() && contrasena != null && !contrasena.isEmpty()) {
            Usuario usuario = bdd.encontrarPorMail(email.trim().toLowerCase());
            if (usuario != null) {
                if (usuario.getContrasena().trim().equals(contrasena.trim())) {
                    Intent intent = new Intent(this, Tienda.class);
                    intent.putExtra("NombreCliente", usuario.getNombre());
                    startActivity(intent);
                    Toast.makeText(this, "Se ha iniciado sesion correctamente.", Toast.LENGTH_SHORT).show();
                } else Toast.makeText(this, "Credenciales incorrectos.", Toast.LENGTH_SHORT).show();
            } else Toast.makeText(this, "No se encontró el usuario.", Toast.LENGTH_SHORT).show();
        }
        else Toast.makeText(this, "Debes introducir todos los datos", Toast.LENGTH_SHORT).show();
    }


}