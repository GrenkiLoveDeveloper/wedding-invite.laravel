<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function home($id = null)
    {
        $invitation = Invitation::find($id);

        $isFormFilled = $invitation && $invitation->event;

        return view('home', ['id' => $id, 'isFormFilled' => $isFormFilled, 'dataGuest' => $invitation]);
    }

    // Метод для обработки отправленной формы
    public function rsvp(Request $request)
    {
        $data = $request->validate(Invitation::validationRules());

        Invitation::updateOrCreate(
            ['id' => $data['id']],
            $data
        );
        return response()->json(['success' => true]);
    }
}
