$flag = InputBox("Flag","Introdu flag-ul");

If StringLeft($flag, 3) <> "RST" Then
	msgbox(0, "Incorect", "Incorect")
elseif StringMid($flag,3,10) <> "flag" Then
	msgbox(0, "Incorect", "Incorect")
else
	msgbox(0, "Flag", "RST{48529cf56fdbee75050b87539d7cb670}")
EndIf