import { Component, OnInit } from '@angular/core';

import { MaterialesService } from '../../service/materiales.service'
import { Producto } from './../../service/producto';

@Component({
  selector: 'app-materiales',
  templateUrl: './materiales.component.html',
  styleUrls: ['./materiales.component.scss']
})
export class MaterialesComponent implements OnInit {
  
  productos : Array<Producto>;

  constructor( private service: MaterialesService) {
    this.productos = new Array<Producto>()
   }


  buscarProd(): void{
    this.service.mostrarMateriales().subscribe((resp: any)=>{
      this.productos = resp;
      console.log(this.productos);
    })
  }

  ngOnInit(): void {
    this.buscarProd();
  }
}
