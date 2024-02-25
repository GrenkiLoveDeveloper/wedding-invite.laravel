<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function home($id = null)
    {
        $invitation = Invitation::find($id);

        $isFormFilled = $invitation && $invitation->guests && $invitation->event;

        return view('home', ['id' => $id, 'isFormFilled' => $isFormFilled]);
    }

    // Метод для обработки отправленной формы
    public function rsvp(Request $request)
    {
        $data = $request->validate(Invitation::validationRules());

        if (is_null($data['id'])) {
            $invitation = Invitation::create($data);
        } else {
            $invitation = Invitation::find(['id' => $data['id']], $data);
        }

        $invitation->fill($data);

        $invitation->save();

        return response()->json(['success' => true]);
    }
}
