import java.util.*;

public class islam
{
    public static void main(String[] args)
    {
        System.out.println("Input: ");
        Scanner console = new Scanner(System.in);
        String s;
        String output = "";
        
        int i = 1;
        do
        {
            s = console.nextLine();
            if (s.equals("Hajj"))
            {
                output += "Case " + i + ": " + "Hajj-e-Akbar \n";
            }
            else if (s.equals("Umrah"))
            {
                output += "Case " + i + ": " + "Hajj-e-Asghar \n";
            }
            else
            {
                break;
            }
            i++;
        } while (s != "*");
        
        System.out.println(output);
    }
}