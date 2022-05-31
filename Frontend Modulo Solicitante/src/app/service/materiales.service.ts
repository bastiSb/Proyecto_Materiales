import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class MaterialesService {
  
  url = 'http://localhost/crudAngular/CrudProducto/';


  constructor(private http: HttpClient) { }

  mostrarMateriales(){
    return this.http.get(`${this.url}mostrarTodos.php`);
  }
}
