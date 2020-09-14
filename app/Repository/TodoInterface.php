<?php
namespace App\Repository;
use Illuminate\Http\Request;


interface ToDoInterface{
  /*
  to add element todo
   @prama $request
  */
    public function store(Request $request);
     /*
      to delete element todo
      @prama  $id
  */
    public function delete($id);
    /*
     to update element todo
     @prama $request, $id
  */
    public function update(Request $request, $id);

}