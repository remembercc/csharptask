using System;

public class Person
{
  public string FName { get; set; }
  public string LName { get; set; }

  public Person(string fname, string lname)
  {
    FName = fname;
    LName = lname;
  }
}

public class Student : Person
{
  public Student(Person person, string code) : base(person.FName, person.LName)
  {
    this.code = code;
  }

  public Student(Person person) : base(person.FName, person.LName)
  {

  }

  public string code { get; set; }
}

static class Program
{
  static void Main(string[] args)
  {
    Student sam = new Student(new Person("Paul", "Chan"), "Catchphrase");

    Console.WriteLine("{0} => {1} => {2}", sam.FName, sam.LName, sam.code);
  }
}