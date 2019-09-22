<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Checklists;
class ChecklistsController extends Controller
{
  public function index()
  {
    $checklists = Checklists::all();
    if ($checklists) {
      $res['meta'] = null;
      $res['link'] = null;
      $res['data'] = $checklists;

      return response($res);
    }else {
      $res['meta'] = null;
      $res['link'] = null;
      $res['data'] = 'Cannot find Checklists';

      return response($res);
    }
  }
}
?>
