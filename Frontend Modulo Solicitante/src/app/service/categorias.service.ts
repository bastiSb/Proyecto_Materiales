import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Categoria } from '../service/categoria';

@Injectable({
  providedIn: 'root'
})
export class CategoriasService {
  
  url = 'http://localhost/crudAngular/CrudCategorias/';

  constructor( private http: HttpClient ) { }

  mostrarCategorias(){
    return this.http.get(`${this.url}mostrarCategorias.php`);
  }
}
