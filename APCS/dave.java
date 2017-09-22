import java.util.*;

public class dave
{
    public static void main(String[] args)
    {
        System.out.println("Input: ");
        
        Scanner console = new Scanner(System.in);
        
        String output = "";
        String s = "";
        String reference = "";
        
        do
        {
            boolean result = true;
            
            s = console.nextLine();
            reference = s;
            
            s = s.replaceAll("[^a-zA-Z]", "");
            s = s.toLowerCase();
            
            int beg = 0;
            int end = s.length() - 1;
            
            while (end > beg)
            {
                if (s.charAt(beg) != s.charAt(end))
                {
                    result = false;
                }
                
                end--;
                beg++;
            }
            
            if (!reference.equals("DONE"))
            {
                if (result == false)
                {
                    output += "Uh oh... \n";
                }
                else
                {
                    output += "You won't be eaten! \n";
                }
            }
        } while (!reference.equals("DONE"));
        
        System.out.println(output);
    }
}