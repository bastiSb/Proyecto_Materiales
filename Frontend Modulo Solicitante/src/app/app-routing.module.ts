import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { InicioComponent } from './principal/inicio/inicio.component';
import { ContactoComponent } from './principal/contacto/contacto.component';

import { MiCuentaComponent } from './cuenta/mi-cuenta/mi-cuenta.component';
import { CambioPdwComponent } from './cuenta/cambio-pdw/cambio-pdw.component';
import { HistorialPedidosComponent } from './cuenta/historial-pedidos/historial-pedidos.component';

import { CategoriasComponent } from './materiales/categorias/categorias.component';
import { MaterialesComponent } from './materiales/materiales/materiales.component';

import { InicioSesionComponent } from './inicio-sesion/inicio-sesion.component';
import { RegistroComponent } from './registro/registro.component';

const routes: Routes = [
  {path: '', pathMatch: 'full', redirectTo: 'principal/inicio'},
  {path: 'principal/inicio', component:InicioComponent},
  {path: 'principal/contacto', component:ContactoComponent},
  {path: 'cuenta/mi-cuenta', component:MiCuentaComponent},
  {path: 'cuenta/cambio-pdw', component:CambioPdwComponent},
  {path: 'cuenta/historial-pedidos', component:HistorialPedidosComponent},
  {path: 'materiales/categorias', component:CategoriasComponent},
  {path: 'materiales/materiales', component:MaterialesComponent},
  {path: 'inicio-sesion', component:InicioSesionComponent},
  {path: 'registro', component:RegistroComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
