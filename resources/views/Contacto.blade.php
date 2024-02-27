@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('container')

<div class="Inicio">
<body style=" background-image: linear-gradient(to bottom right, #000000, #0c021b);">

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center mb-5 texto">¡Contáctanos!</h1>
            <form id="contactForm">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" required>
                </div>
                <div class="mb-3">
                    <label for="tipo_documento" class="form-label">Tipo de Documento</label>
                    <select class="form-select" id="tipo_documento" name="tipo_documento" required>
                        <option value="">Selecciona tu tipo de documento</option>
                        <option value="Cédula Ciudadana">Cédula Ciudadana</option>
                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="numero_documento" class="form-label">Número de Documento</label>
                    <input type="text" class="form-control" id="numero_documento" name="numero_documento" required>
                </div>
                <div class="mb-3">
                    <label for="departamento" class="form-label">Departamento</label>
                    <select class="form-select" id="departamento" name="departamento" required>
                        <option value="">Selecciona tu departamento</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Antioquia">Antioquia</option>
                        <option value="Arauca">Arauca</option>
                        <option value="Atlántico">Atlántico</option>
                        <option value="Bolívar">Bolívar</option>
                        <option value="Boyacá">Boyacá</option>
                        <option value="Caldas">Caldas</option>
                        <option value="Caquetá">Caquetá</option>
                        <option value="Casanare">Casanare</option>
                        <option value="Cauca">Cauca</option>
                        <option value="Cesar">Cesar</option>
                        <option value="Chocó">Chocó</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Cundinamarca">Cundinamarca</option>
                        <option value="Guainía">Guainía</option>
                        <option value="Guaviare">Guaviare</option>
                        <option value="Huila">Huila</option>
                        <option value="La Guajira">La Guajira</option>
                        <option value="Magdalena">Magdalena</option>
                        <option value="Meta">Meta</option>
                        <option value="Nariño">Nariño</option>
                        <option value="Norte de Santander">Norte de Santander</option>
                        <option value="Putumayo">Putumayo</option>
                        <option value="Quindío">Quindío</option>
                        <option value="Risaralda">Risaralda</option>
                        <option value="San Andrés y Providencia">San Andrés y Providencia</option>
                        <option value="Santander">Santander</option>
                        <option value="Sucre">Sucre</option>
                        <option value="Tolima">Tolima</option>
                        <option value="Valle del Cauca">Valle del Cauca</option>
                        <option value="Vaupés">Vaupés</option>
                        <option value="Vichada">Vichada</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <select class="form-select" id="ciudad" name="ciudad" required>
                        <option value="">Selecciona tu ciudad</option>
                        <option value="Leticia">Leticia</option>
                            <option value="Medellín">Medellín</option>
                            <option value="Arauca">Arauca</option>
                            <option value="Barranquilla">Barranquilla</option>
                            <option value="Cartagena de Indias">Cartagena de Indias</option>
                            <option value="Tunja">Tunja</option>
                            <option value="Manizales">Manizales</option>
                            <option value="Florencia">Florencia</option>
                            <option value="Yopal">Yopal</option>
                            <option value="Popayán">Popayán</option>
                            <option value="Valledupar">Valledupar</option>
                            <option value="Quibdó">Quibdó</option>
                            <option value="Montería">Montería</option>
                            <option value="Bogotá">Bogotá</option>
                            <option value="Inírida">Inírida</option>
                            <option value="San José del Guaviare">San José del Guaviare</option>
                            <option value="Neiva">Neiva</option>
                            <option value="Riohacha">Riohacha</option>
                            <option value="Santa Marta">Santa Marta</option>
                            <option value="Villavicencio">Villavicencio</option>
                            <option value="San Juan de Pasto">San Juan de Pasto</option>
                            <option value="San José de Cúcuta">San José de Cúcuta</option>
                            <option value="Mocoa">Mocoa</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Pereira">Pereira</option>
                            <option value="San Andrés">San Andrés</option>
                            <option value="Bucaramanga">Bucaramanga</option>
                            <option value="Sincelejo">Sincelejo</option>
                            <option value="Ibagué">Ibagué</option>
                            <option value="Cali">Cali</option>
                            <option value="Mitú">Mitú</option>
                            <option value="Puerto Carreño">Puerto Carreño</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="comentario" class="form-label">Comentario</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="4"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn boton-envio">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
