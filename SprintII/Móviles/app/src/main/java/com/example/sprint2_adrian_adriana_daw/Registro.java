package com.example.sprint2_adrian_adriana_daw;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class Registro extends AppCompatActivity {

    private ImageView imgLogo;
    private TextView textViewRegistro;
    private EditText editTextEmail, editTextNombre, editTextContrasena;
    private Button botonRegistrarse;
    BdD bdd;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);


        bdd = new BdD(Registro.this);

        initializeViews();


        botonRegistrarse.setOnClickListener(v -> registrarse(editTextEmail.getText().toString(), editTextNombre.getText().toString(), editTextContrasena.getText().toString()));
    }


    private void registrarse(String email, String nombre, String contrasena){
        if(email!=null && !email.isEmpty() && nombre!=null && !nombre.isEmpty() && contrasena!=null && !contrasena.isEmpty()){
            if(bdd.encontrarPorMail(email.toLowerCase().trim())==null){
                Usuario usuario = new Usuario(email.toLowerCase().trim(), nombre.trim().toLowerCase(), contrasena.trim());
                if(bdd.addUsuario(usuario)) Toast.makeText(this, "Registro exitoso.", Toast.LENGTH_SHORT).show();
            }
            else Toast.makeText(this, "El correo ya está asociado a una cuenta", Toast.LENGTH_SHORT).show();
        }else Toast.makeText(this, "Debes introducir todos los datos", Toast.LENGTH_SHORT).show();
    }

    private void initializeViews() {
        imgLogo = findViewById(R.id.imgLogo);
        imgLogo.setImageResource(R.drawable.img_logo);
        textViewRegistro = findViewById(R.id.textViewRegistro);
        editTextEmail = findViewById(R.id.editTextEmail);
        editTextNombre = findViewById(R.id.editTextNombre);
        editTextContrasena = findViewById(R.id.editTextContrasena);
        botonRegistrarse = findViewById(R.id.botonRegistrarse);
    }



}
