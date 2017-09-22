import java.util.*;

public class chase
{
    public static void main(String[] args)
    {
        System.out.println("Input: ");
        
        Scanner input = new Scanner(System.in);
        
        int numRuns = input.nextInt();
        input.nextLine();
        
        String output = "";
        
        for (int i = 0; i < numRuns; i++)
        {
            String s = input.nextLine();
            
            Scanner reader = new Scanner(s);
            
            int temp = -1;

            while (reader.hasNext())
            {
                String sTemp = reader.next();
                
                if (Integer.parseInt(sTemp) > temp)
                {
                    temp = Integer.parseInt(sTemp);
                }
            }
            
            output += "Case " + (i + 1) + ": " + temp + " \n";
        }
        
        System.out.println(output);
    }
}