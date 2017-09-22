import java.util.*;

public class calcDonations
{
    public static void main(String[] args)
    {
        System.out.println("Number of Commands: ");
        
        Scanner console = new Scanner(System.in);
        Scanner splitter;
        
        int numCommands = console.nextInt();
        console.nextLine();

        String output = "\nTotal Monetary Amount of Donations: \n";
        int amt = 0;
        
        int i = 0;
        
        while (i < numCommands)
        {
            String input = console.nextLine();
            
            splitter = new Scanner(input);
            
            String s = splitter.next();
            if (s.equals("donate"))
            {
                int temp = Integer.parseInt(splitter.next());
                amt += temp;
            }
            else if (s.equals("report"))
            {
                output += Integer.toString(amt) + "\n";
            }
            else
            {
                System.out.println("Wrong input, try again.");
                i--;
            }
            
            i++;
        } 
        
        System.out.println(output);
    }
}