using System;

public class HelloWorld
{

    public static int cal (String str)
    {
        // string fc = str.Substring(0, 1);
        int result = -1;

        switch (str)
        {
            case "Jan":
                result = 1;
                break;
            case "Feb":
                result = 2;
                break;
            case "Mar":
                result = 3;
                break;
            case "Apr":
                result = 4;
                break;
            case "May":
                result = 5;
                break;
            case "Jun":
                result = 6;
                break;
            case "Jul":
                result = 7;
                break;
            case "Aug":
                result = 8;
                break;
            case "Sep":
                result = 9;
                break;
            case "Oct":
                result = 10;
                break;
            case "Nov":
                result = 11;
                break;
            case "Dec":
                result = 12;
                break;
            default:
                result = -1;
                break;
        }

        return result;
    }

    public static void Main ()
    {
        string str;

        Console.WriteLine("Input: ");

        str = Console.ReadLine();

        int grade = cal(str);

        Console.WriteLine("{0} => {1}", str, grade);
    }
}