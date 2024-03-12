package com.example.sprint2_adrian_adriana_daw;

public class Usuario {
    String nombre = "";
    String contrasena = "";
    String email = "";

    public Usuario(String email, String nombre, String contrasena) {
        this.nombre = nombre;
        this.contrasena = contrasena;
        this.email = email;
    }

    public String getNombre() {
        return nombre;
    }

    public String getContrasena() {
        return contrasena;
    }

    public String getEmail() {
        return email;
    }
}