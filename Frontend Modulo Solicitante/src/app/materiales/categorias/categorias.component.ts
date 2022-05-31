import { Component, OnInit } from '@angular/core';

import { CategoriasService } from '../../service/categorias.service'
import { Categoria } from "./../../service/categoria";

@Component({
  selector: 'app-categorias',
  templateUrl: './categorias.component.html',
  styleUrls: ['./categorias.component.scss']
})
export class CategoriasComponent implements OnInit {
  
  categorias : Array<Categoria>;

  constructor(private categoriaService: CategoriasService ) { 
    this.categorias = new Array<Categoria>();
  }

  buscarCategorias(): void{
    this.categoriaService.mostrarCategorias().subscribe((resp: any)=>{
      this.categorias = resp;
      console.log(this.categorias);
    })
  }

  ngOnInit(): void {
    this.buscarCategorias();
  }

}
