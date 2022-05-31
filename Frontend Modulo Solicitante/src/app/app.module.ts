import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { MiCuentaComponent } from './cuenta/mi-cuenta/mi-cuenta.component';
import { CambioPdwComponent } from './cuenta/cambio-pdw/cambio-pdw.component';
import { HistorialPedidosComponent } from './cuenta/historial-pedidos/historial-pedidos.component';

import { CategoriasComponent } from './materiales/categorias/categorias.component';
import { MaterialesComponent } from './materiales/materiales/materiales.component';
import { InicioComponent } from './principal/inicio/inicio.component';
import { ContactoComponent } from './principal/contacto/contacto.component';

import { InicioSesionComponent } from './inicio-sesion/inicio-sesion.component';
import { RegistroComponent } from './registro/registro.component';

@NgModule({
  declarations: [
    AppComponent,
    MiCuentaComponent,
    CambioPdwComponent,
    HistorialPedidosComponent,
    CategoriasComponent,
    MaterialesComponent,
    InicioComponent,
    ContactoComponent,
    InicioSesionComponent,
    RegistroComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
