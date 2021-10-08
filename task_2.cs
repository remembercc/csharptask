using System;

new Being();
new Being("Tom");

class Being
{
    public Being()
    {
        Console.WriteLine("Being is created");
    }

    public Being(string being)
    {
        Console.WriteLine($"Being {being} is created");
    }
}